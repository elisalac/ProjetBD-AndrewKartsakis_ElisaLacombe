<!DOCTYPE html>
<html>

<head>
    <style>
        #inputContainer {
            float: right;
        }

        #formContainer {
            margin-bottom: 15px;
        }

        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div id="formContainer">
        <fieldset>
            <form>
                <div id="inputContainer">
                    <!-- <input type="submit" value="Add a document" /> -->
                    <a href="newDocument.html"><button>Add a document</button></a>
                    <select>
                        <option>None</option>
                        <option value="asc">Order by title (asc)</option>
                        <option value="desc">Order by title (desc)</option>
                        <option value="type">Order by type</option>
                        <option value="availability">Order by availability</option>
                    </select>
                    <input type="text" name="search" placeholder="Search a document" />
                    <input type="submit" value="Filter" />
                </div>
            </form>
        </fieldset>
    </div>
    <div id="documentContainer">
        <table>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Copy</th>
                <th>Availability</th>
                <th>Details</th>
            </tr>
            <!-- each document will be generated in a <tr> and then the data will go in <td> -->
        </table>
    </div>
</body>

</html>