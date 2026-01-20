<!DOCTYPE HTML>

<html>

    <head>

        <title>Create User Form</title>

    </head>

    <body>

        <form action="/users/create" method="POST">

            <label>
              Name:
              <input name="name">
            </label>

            <label>
              Email:
              <input type="email" name="email">
            </label>

            <label>
              Password:
              <input type="password" name="password">
            </label>

            <input type="submit">

        </form>

    </body>

</html>
