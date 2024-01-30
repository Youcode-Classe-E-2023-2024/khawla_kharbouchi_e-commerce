<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & MySQL</title>
</head>
<body>
    <div>
        <?php
        try {
            if (DB::connection()->getPDO()) {
                echo "Successfully connected to DB and DB Name is " . DB::connection()->getDatabaseName();
            }
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>
