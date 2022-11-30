<body>
<nav class="navbar navbar-expand">
  <div class="container-fluid">
    <a class="navbar-brand text-warning px-5" style="font-weight: bold;" href="#">USERTABLE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="ms-auto navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-warning active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-warning" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container py-5">
<table class="w-100 table bg-warning">
    <tr>
        <th class="px-3">Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
<?php foreach ($data as $row){ ?>
    <tr>
        <td class="px-3"><?= $row->id ?> </td>
        <td><?= $row->name ?> </td>
        <td><?= $row->addres ?> </td>
        <td><?= $row->email ?> </td>
        <td><?= $row->password ?> </td>
    </tr>

<?php }
?>
</div>
</table>
</body>
</html>