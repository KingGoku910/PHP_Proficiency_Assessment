<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Generator with Database</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="./css/bootstrap.css">
    <link rel='stylesheet' type='text/css' href="./css/bootstrap.css.map">
    
</head>
    <body>
    <div class="container">
        <div class="card col-md-6 mx-auto text-center">
            <div class="card-header bg-primary justify-center">
                <h2 class="card-title text-white ">Test 2: CSV Generator</h2>
            </div>
            <div class="card-body">                
                
                <form action="generate.php" method="get" id="f1">
                    <div class="form-group">
                        
                        <h2>Type in the number of entries to generate...</h2><br/>
                        <label for="Generate">Enter the amount here:</label><br>
                        <input type="text" class="form-control" id="Generate" name="Generate" value="" required><br><br>
                    
                    </div>
                    <div class="form-group">

                        <h1>Upload CSV File to Database</h1><br/>
                        <!--Buttons-->
                        <button type="submit" id="btnGenerate" class="btn btn-primary">Generate</button>
                        
                        
                    </div>
                </form>
                <br/>
                <form id="f2" method="post" enctype="multipart/form-data" action="saveToDB.php">
                    <div class="form-group">

                        <label id="lbl">Upload CSV File:</label><br/><br/>
                        <input type="file" class="btn btn-primary" name="file" /><br/>
                        <br />
                        <input type="submit" class="btn btn-primary" name="submit" value="Import" id="btnsub" />
        
                    </div>
                </form>
                
                                
            </div>
            <div class="card-footer text-muted text-right">
                <small>&copy; Ryno Rossouw</small>
            </div>
        </div>      
    </div>

    
</body>

</html>