<!doctype html>
<html>
    <head>
        <title>Add a new Record</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Add a new Record</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="save.php">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="50%">Column Name</th>
                                    <th width="50%">Value</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" name="column[]" class="form-control" required="required" value="Name"></td>
                                    <td><input type="text" name="value[]" class="form-control" required="required"></td>
                                    <td width="10%"><button type="button" class="btn btn-primary" onclick="addMaintenance()"><i class="fa fa-plus"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function addMaintenance() {
                var txt = "";
                txt += '<tr>';
                txt += '<td><input type="text" name="column[]" class="form-control" required="required"></td>';
                txt += '<td><input type="text" name="value[]" class="form-control" required="required"></td>';
                txt += '<td width="10%"><button type="button" class="btn btn-danger" onclick="removeMaintenance(this)"><i class="fa fa-trash"></i></button></td>';
                txt += '</tr>';
                $("tbody").append(txt);
            }
            function removeMaintenance(e) {
                e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
            }
        </script>
    </body>
</html>
