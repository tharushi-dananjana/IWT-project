<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boat Management</title>
    <link rel="stylesheet" href="css/Iindex.css">
    <link rel="stylesheet" href="css/Istylee.css">
</head>
<body>
    <?php include 'Header.php'; ?>
    <div class="mlb">
        <div class="wrapper">
            <h1 align="center" style="color: white;">Boat Management</h1>
        </div>

        <div class="main">
            <form id="boatForm" action="Iinsert.php" method="post">
                <fieldset class="doner-info">
                    <p class="poor">Boat information</p>
                    <br>

                    <div class="form-group">
                        <label for="ID">ID</label>
                        <input type="text" id="ID" name="bsid" placeholder="ID">
                    </div>

                    <div class="form-group">
                        <label for="code">Code</label>
                        <input type="text" id="code" name="bcode" placeholder="code">
                    </div>

                    <div class="form-group">
                        <label for="owner">Owner</label>
                        <input type="text" id="owner" name="bowner" placeholder="owner">
                    </div>

                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" id="type" name="btype" placeholder="type">
                    </div>

                    <div class="form-group">
                        <label for="rent">Rent</label>
                        <input type="text" id="rent" name="brent" placeholder="rent">
                    </div>

                    <input type="submit" value="Submit">
                </fieldset>
            </form>
        </div>
    </div>
    <?php include 'Footer.php'; ?>
</body>

<script>
    document.getElementById('boatForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get input values
        const id = document.getElementById('ID').value;
        const code = document.getElementById('code').value;
        const owner = document.getElementById('owner').value;
        const type = document.getElementById('type').value;
        const rent = document.getElementById('rent').value;

        // Display the values in an alert
        alert(`ID: ${id}\nCode: ${code}\nOwner: ${owner}\nType: ${type}\nRent: ${rent}`);

        // Delay submission for 1 second before submitting
        setTimeout(() => {
            this.submit(); // Submit the form
        }, 1000); // Delay in milliseconds (1000 ms = 1 second)
    });
</script>
</html>
