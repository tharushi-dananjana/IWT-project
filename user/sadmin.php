


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <title>Admin Dashboard</title>
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <link  rel="stylesheet" href="css/sadmin.css">
    </head>
    
    <body>
        
<div class="sidebar">
    <div class="sidebar-brand">
        <div class="brand-flex">
            <img src="img/logo.jpg" width="30px" alt="">

            <div class="brand-icons">
                <span class="las la-bell"></span>
                <span class="las la-user-circle"></span>
            </div>
        </div>
    </div>
    <div class="sidebar-main">
        <div class="sidebar-user">
            <img src="img/imggg.jpg"  alt="">
            <div>
                <h3>Anne Johonson</h3>
                <span>Annjhonson@gmail.com</span>
            </div>
        </div>
        <div class="sidebar-menu">
           <div class="menu-head">
            <span>Dashboard</span>
           </div>
           <ul>
            <li> 
                <a href="#">
                    Package details
                </a>
            </li>
            <li>
                <a href="#">
                
             User details
             
                </a>
           </li>
           </ul>

           <div class="menu-head">
            <span>Applictions</span>
           </div>
           <ul>
            
            <li>
                <a href="#">
                    <span class="las la-calendar-check"></span>
                    Reservations
                </a>
           </li>
           <li>
            <a href="#">
                <span class="las la-donate"></span>
                Donetions
            </a>
           </li>
           </ul>

        </div>
    </div>
</div>
<div class="main-content">
    <header>
        <div class="menu-toggle">
            <label for="">
               <span class="las la-bars"></span>
            </label>
            
        </div>
        <span class="header-icons"></span>
        <div>
            <span class="las la-search"></span>
            <span class="las la-bookmark"></span>
            <span class="las la-sms"></span>
        </div>
    </header>

    <main>
      <div class="page-header">
        <div>
            <h1>Analytics Dashboard</h1> 
            <?php include'read.php'?>
        </div>

      </div>
      
    </main>
 

    
</div>
    </body>
</html>