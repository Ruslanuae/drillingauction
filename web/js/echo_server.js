var conn = new WebSocket('ws://127.0.0.1:8081');
conn.onmessage = function(e) {
  console.log('Response:' + e.data);
};
conn.onopen = function(e) {
  console.log('ping');
  conn.send('ping');
};