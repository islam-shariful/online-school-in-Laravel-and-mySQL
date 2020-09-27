<!DOCTYPE html>
<html>
<head>
    <title>Library</title>
</head>
<body>

    <h1>ADD NEW BOOK</h1>

    <a href="/home">Back</a>
    <form method="post">
        
        {{csrf_field()}}
        <table>
            <tr>
                <td>Book ID</td>
                <td><input type="text" name="bid" </td>
            </tr>
            <tr>
                <td>Book Name</td>
                <td><input type="text" name="bname" ></td>
            </tr>

            <tr>
                <td>Author</td>
                <td><input type="text" name="author" ></td>
            </tr>
            
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Store Book"></td>
            </tr>
        </table>
    </form>
</body>
</html>