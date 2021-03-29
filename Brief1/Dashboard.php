<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Dashstyle.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
   
    <nav class="topnav">
        <div class="logo">
            <a href="#" class="display-sm display-md" id="menu"><i class="fa fa-list-ul"></i></a>
            <a href="index.html" class="hidden-sm"><h1>Dashboard</h1></a>
        </div>
        <div class="user-menu">
            <form action="#" method="post" class="hidden-sm">
                <i class="fa fa-search"></i>
            </form>
            <div>
                <a href="#">admin name</a>
                <a href="logout.php" >log out</a>
            </div>
        </div>
    </nav>
   
   <aside class="sidenav hidden-sm hidden-md" id="nav">
       <div class="list">
           <a href="index.php" > Home</a>
           <a href="Menu.php"> Menu</a>

       </div>
   </aside>

   <main class="content">
 

      <div class="grid">
          <div class="painel">
              <div class="painel-header">
                  <h4 class="painel-title">Table</h4>
              </div>
                <table class="zebra">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>salad</td>
                        <td>salade last one </td>
                        <td>
                            <a href="#" class="btn btn-red"><i class="fa fa-trash"></i></a>
                            <a href="#" class="btn btn-green"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn btn-orange"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                   
                </table>
              </div>
          </div>

          
                    
               </form>
              </div>
          </div>
      </div>
   </main>
</body>
</html>