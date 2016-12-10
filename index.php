<!DOCTYPE html>
<html>
<head>
    <link type="text/javascript" src="script/jquery-3.1.1.min.js">
    <link type='text/css' rel='stylesheet' href='css/bootstrap.min.css'/>
    <script type='text/javascript' src="script/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <br>
            <form>
                <div class="col-md-6">
                    <input type="text" class="form-control input-xs" placeholder="Search.." />
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="sel1">
                        <option value="" hidden>Catagory</option>
                        <?php include "DataObjects/Categories.php"?>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info btn-md" type="button">
                        <i class="glyphicon glyphicon-search"> Search</i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-2">
            <br>
            <div class="col-md-6">
                <button class="btn btn-info btn-md" type="button">
                    <i class="glyphicon"> Admin</i>
                </button>
            </div>
        </div>
    </div>

    <h1><strong>WELCOME</strong></h1>
    <h4>Trending products:</h4>
    <div>

    </div>
</div>
</body>
</html