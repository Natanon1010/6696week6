<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include("conn.php");
?>
  
    <!-- เพิ่ม Boottrap -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body{
            font-family: "Charm", serif;
            font-weight: 400;
            font-style: normal;
            margin-top: 100px;
            margin-left: 100px;
            margin-bottom: 100px;
            
        }
    </style>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สร้างฟอร์ม Bootstrap และเขียนโปรแกรมและเงื่อนไข</title>
</head>
<body>
    <h1>โปรแกรมเพิ่มข้อมูล</h1>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">ชื่อ</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="ID">
    </div>
    </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">รุ่น</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="Model">
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">ประเภท</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="Category">
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">ขนาด</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="Size">
    </div>
    <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2">สี</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputEmail3" name="Color">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2">ราคา</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="inputPassword3" name="Price">
    </div>
    <label for="inputEmail3" class="col-sm-2">บาท</label>
  </div>
  <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
  <button type="reset" class="btn btn-danger">ยกเลิก</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ชื่อ=$_POST["ID"];
    $รุ่น=$_POST["Model"];
    $ประเภท=$_POST["Category"];
    $ขนาด=$_POST["Size"];
    $สี=$_POST["Color"];
    $ราคา=$_POST["Price"];
    
    try {
        
        $sql = "INSERT INTO Vans (ID,Model,Category,Size,Color,Price)
        VALUES ('$ชื่อ', '$รุ่น', '$ประเภท', '$ขนาด', '$สี', '$ราคา')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<div class='alert alert-success'>
            <strong>บันทึกสำเร็จ</strong>ยินดีด้วยครับ คุณได้บันทึกข้อมูลเข้าไปใหม่ 1 รายการ </div>";
      } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      
      $conn = null;
    
}
?>
</body>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>