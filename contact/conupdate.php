<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  
  <body>
    <form method="post" action="update.php">
    <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-left">
              <div class="screen-header-button close"></div>
              <div class="screen-header-button maximize"></div>
              <div class="screen-header-button minimize"></div>
            </div>
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <div class="app-title">
                <span>CONTACT</span>
                <span>US</span>
              </div>
              <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
            </div>
            <div class="screen-body-item">
              <div class="app-form">
                <div class="app-form-group">
                  <input class="app-form-control" name="sname" placeholder="NAME" >
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" name="semail" placeholder="EMAIL">
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" name="scontact" placeholder="CONTACT NO">
                </div>
                <div class="app-form-group message">
                  <input class="app-form-control" name="smassage" placeholder="MESSAGE">
                </div>
                <div class="app-form-group buttons">
                  <button class="app-form-button">CANCEL</button>
                  <button class="app-form-button">UPDATE</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

  </body>
</html>
 