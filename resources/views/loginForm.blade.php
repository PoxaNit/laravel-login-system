<!DOCTYPE HTML5>

<html>

    <head>

        <title>Login Form</title>

    </head>

    <body>

        <form method="POST" action="/login">
            @csrf
            <section>

                <label for="name">Name:</label>
                <input id="name" required name="name">

                <label for="password">Password:</label>
                <input type="password" required id="password" name="password">

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
