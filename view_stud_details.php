<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Student Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Student Details</h1>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">Field</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name (Legal/Official):</td>
                    <td><?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Matric No:</td>
                    <td><?php echo isset($_POST['matricNo']) ? htmlspecialchars($_POST['matricNo']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Current Address:</td>
                    <td><?php echo isset($_POST['currentAddress']) ? htmlspecialchars($_POST['currentAddress']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Home Address:</td>
                    <td><?php echo isset($_POST['homeAddress']) ? htmlspecialchars($_POST['homeAddress']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Mobile Phone No:</td>
                    <td><?php echo isset($_POST['mobilePhoneNo']) ? htmlspecialchars($_POST['mobilePhoneNo']) : ''; ?></td>
                </tr>
                <tr>
                    <td>Home Phone No:</td>
                    <td><?php echo isset($_POST['homePhoneNo']) ? htmlspecialchars($_POST['homePhoneNo']) : ''; ?></td>
                </tr>
            </tbody>
        </table>
        <a href="stud_details.html" class="btn btn-primary">Back</a>
        
    </div>
</body>
</html>