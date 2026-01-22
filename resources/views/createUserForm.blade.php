<!DOCTYPE HTML>

<html>

    <head>

        <title>Create User Form</title>

    </head>

    <body>

        <form action="/users/form" method="POST">
            @csrf
            <section>

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

            </section>

            @if (isset($formErrors) && !empty($formErrors))

                <section>

		    <p class="error_message_p">{{$formErrors[0]}}</p>

                </section>

            @endif

        </form>

    </body>

</html>
