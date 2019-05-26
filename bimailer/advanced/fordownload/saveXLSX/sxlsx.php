<?php
/**
 * Simple XLSX [http://www.kirik.ws/sxlsx.html]
 * @author kirik [mail@kirik.ws]
 * @version 0.1
 * 
 * Developed under GNU General Public License, version 3:
 * http://www.gnu.org/licenses/lgpl.txt
**/
class sxlsx {
     const DS = DIRECTORY_SEPARATOR;
     const VERSION = '0.1';
     const TPL_DIR = 'templates';
     const SKEL_DIR = 'skeleton';
     private $_row2col = array();
     private $_col2row = array();
     private $_cSheet; // current sheet
     private $_sheets = array();
     private $_sxlsxPath;
     // templates
     private $_tpls = array(
          '/[Content_Types].xml' => '',
          '/sheet.xml' => '',
          '/docProps/app.xml' => '',
          '/docProps/core.xml' => '',
          '/xl/_rels/workbook.xml.rels' => '',
          '/xl/workbook.xml' => '',
          '/xl/sharedStrings.xml' => ''
     );
     // parsed templates
     private $_parsed = array();

     public function __construct($path = '') {
          $this->_sxlsxPath = $path;
     }

     public function addSheet($id, $name = '', $select = true) {
          if(!is_int($id)) {
               throw new sxlsx_Exception('wrong sheet id "' . $id . '"');
          }
          $this->_sheets[$id] = $name;
          $this->_col2row[$id] = $this->_row2col[$id] = array();
          if($select) {
               $this->selectSheet($id);
          }
          return $this;
     }

     public function selectSheet($id) {
          if(!isset($this->_sheets[$id])) {
               throw new sxlsx_Exception('can\'t select sheet #' . $id);
          }
          $this->_cSheet = $id;
          return $this;
     }

     public function deleteSheet($id) {
          if(!isset($this->_sheets[$id])) {
               throw new sxlsx_Exception('can\'t delete sheet #' . $id);
          }
          unset($this->_sheets[$id], $this->_col2row[$id], $this->_row2col[$id]);
          return $this;
     }

     public function addData($cell, $content = '') {
          if(!isset($this->_cSheet)) {
               throw new sxlsx_Exception('please create and select sheet first');
          } elseif((list($col, $row) = $this->_parsePairs($cell)) === false) {
               throw new sxlsx_Exception('wrong cell naming');
          }
          $col = strtoupper($col);
          $this->_col2row[$this->_cSheet][$col][$row] = $content;
          $this->_row2col[$this->_cSheet][$row][$col] = & $this->_col2row[$this->_cSheet][$col][$row];
          return $this;
     }

     public function generate($name = '') {
          // Get templates content
          foreach($this->_tpls as $file => &$content) {
               $content = file_get_contents(dirname(__FILE__) . self::DS . 'templates' . $file);//Читаем папку bimailer/advanced/fordownload/saveXLSX/templates
               $content = preg_replace("/([\n\t\r]+|\s{2,})/", '', $content);
          }
          unset($content);
          $i = 2;
          $_wbRel = $_wbSheet = $_ctOver = '';
          $strings = array();
          foreach($this->_sheets as $sId => $sName) {
               if(empty($sName)) {
                    $sName = 'Sheet ' . $sId;
               }
               $_wbSheet .= '<sheet name="' . $sName . '" sheetId="' . $sId . '" state="visible" r:id="rId' . ($i + 1) . '"></sheet>';
               $_wbRel .= '<Relationship Id="rId' . ($i + 1) .
                         '" Type="http://schemas.openxmlformats.org/officeDocument/2006/relationships/worksheet" Target="worksheets/sheet' . $sId .
                         '.xml"></Relationship>';
               $_ctOver .= '<Override PartName="/xl/worksheets/sheet' . $sId .
                         '.xml" ContentType="application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml"></Override>';
               uksort($this->_col2row[$sId], __CLASS__ . '::_colSort');
               ksort($this->_row2col[$sId], SORT_NUMERIC);
               $rows = array();
               foreach($this->_col2row[$sId] as $col => $data) {
                    ksort($data, SORT_NUMERIC);
                    foreach($data as $row => $content) {
                         if(is_int($content)) {
                              $t = 'n';
                              $c = $content;
                         } else {
                              $t = 's';
                              $c = array_push($strings, '<si><t>' . htmlspecialchars($content, ENT_QUOTES) . '</t></si>') - 1;
                         }
                         if(empty($rows[$row])) {
                              $rows[$row] = '';
                         }
                         $rows[$row] .= '<c r="' . $col . $row . '" s="0" t="' . $t . '"><v>' . $c . '</v></c>';
                    }
               }
               unset($data);
               $sheetData = '';
               foreach($rows as $row => $data) {
                    $sheetData .= '<row collapsed="false" customFormat="false" customHeight="false" ' .
                              'hidden="false" ht="14.75" outlineLevel="0" r="' . $row . '">' . $data . '</row>';
               }
               end($this->_col2row[$sId]);
               end($this->_row2col[$sId]);
               $sheetData = array(
                    '{REF}' => 'A1:' . key($this->_col2row[$sId]) . key($this->_row2col[$sId]),
                    '{SHEETDATA}' => $sheetData,
               );
               self::_fReplace('/sheet.xml', array_keys($sheetData), array_values($sheetData), '/xl/worksheets/sheet' . $sId . '.xml');
               $i++;
          }
          $sst = array(
               '{COUNT}' => count($strings),
               '{UCOUNT}' => count($strings),
               '{STRINGS}' => implode('', $strings)
          );
          self::_fReplace('/xl/sharedStrings.xml', array_keys($sst), array_values($sst));
          self::_fReplace('/[Content_Types].xml', '{SHEETS}', $_ctOver);
          self::_fReplace('/docProps/app.xml', '{APPLICATION}', 'XSLX PHP Generator$kirill@a5web.com$v' . self::VERSION);
          self::_fReplace('/xl/workbook.xml', '{SHEETS}', $_wbSheet);
          self::_fReplace('/xl/_rels/workbook.xml.rels', '{SHEETS}', $_wbRel);
          $core = array(
               '{MODIFIEDBY}' => 'XSLX PHP Generator',
               '{DATE}' => strftime('%Y-%m-%dT%H:%M:%SZ')
          );
          self::_fReplace('/docProps/core.xml', array_keys($core), array_values($core));
          if(empty($this->_sxlsxPath)) {
               $this->_sxlsxPath = tempnam(sys_get_temp_dir(), 'sxlsx_');
               $remove = true;
          }
          
               include_once('zipfile.php');
               
               // create archive
               $zip = new zipfile();
               $sxlsx_FS = new sxlsx_FS(dirname(__FILE__) . self::DS . self::SKEL_DIR);
               list($d, $f) = $sxlsx_FS->get();
               $this->_parsed += $f;
               foreach($this->_parsed as $file => $content) {
                    $zip->addFile($content, ltrim($file, self::DS));
               }
               //file_put_contents("tmp/".$this->_sxlsxPath, $zip->file());
               // chmod($this->_sxlsxPath, 0777);
        

          if(!empty($name)) {
               if(ini_get('zlib.output_compression')) { 
                    ini_set('zlib.output_compression', 'Off'); 
               }
				$nms=iconv ("utf-8", "windows-1251", $name );
               // http://ca.php.net/manual/en/function.header.php#76749
               header('Pragma: public'); 
               header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");                  // Date in the past    
               header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); 
               header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1 
               header('Cache-Control: pre-check=0, post-check=0, max-age=0');    // HTTP/1.1 
               header("Pragma: no-cache"); 
               header("Expires: 0"); 
               header('Content-Transfer-Encoding: none'); 
               header('Content-Type: application/vnd.ms-excel;');                 // This should work for IE & Opera 
               header("Content-type: application/x-msexcel");                    // This should work for the rest 
               header('Content-Disposition: attachment; filename="' . $nms . '"');
			   echo($zip->file());
          }
          if(isset($remove)) {
               unlink($this->_sxlsxPath);
          }
     }

     private function _fReplace($tpl, $pattern, $data, $dst = null) {
          if($dst === null) {
               $dst = $tpl;
          }
          $this->_parsed[$dst] = str_replace($pattern, $data, $this->_tpls[$tpl]);
     }

     private static function _colSort($a, $b) {
          if(($al = strlen($a)) == ($bl = strlen($b))) {
               return strcmp($a, $b);
          }
          return ($al < $bl) ? -1 : 1;
     }

     private function _parsePairs($val) {
          if(preg_match('#^([a-z]+)(\d+)$#i', $val, $o)) {
               return array($o[1], $o[2]);
          } else {
               return false;
          }
     }
}

class sxlsx_Exception extends Exception {
    public function __construct($msg) {
          parent::__construct('Simple XLSX error: ' . $msg);
    }

    public function __toString() {
        return htmlspecialchars($this->getMessage());
    }
}

class sxlsx_FS {
     private $path;
     public $dirs = array();
     public $filesContent = array();
     public function __construct($path) {
          $this->path = rtrim($path, sxlsx::DS);
          return $this;
     }

     public function get() {
          $this->_scan(sxlsx::DS);
          return array($this->dirs, $this->filesContent);
     }

     private function _scan($pathRel) {
          if($handle = opendir($this->path . $pathRel)) {
               while(false !== ($item = readdir($handle))) {
                    if($item == '..' || $item == '.') {
                         continue;
                    }
                    if(is_dir($this->path . $pathRel . $item)) { 
                         $this->dirs[] = ltrim($pathRel, sxlsx::DS) . $item;
                         $this->_scan($pathRel . $item . sxlsx::DS);
                    } else {
                         $this->filesContent[ltrim($pathRel, sxlsx::DS) . $item] = file_get_contents($this->path . $pathRel . $item);
                    }
               }
               closedir($handle);
          }
     }
}