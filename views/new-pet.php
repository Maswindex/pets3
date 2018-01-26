<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <check if="{{@success}}">
        <h2>{{@name}} thanks you for your order of a {{@color}} {{@animal}}</h2>
    </check>

    <!-- Color -->
    <label class="col-sm-1 control-label"
           for="pet-color">Pet Color</label>

    <div class="col-sm-3">
        <check if="{{@errors['color']}}">
            <p>{{@errors['color']}}</p>
        </check>

        <form action="./new-pet" method="post">
            <select class="form-control" name="color" id="pet-color">
                <option>--Select--</option>
                <repeat group="{{@colors}}" value="{{@colorOption}}">
                    <option>
                        <check if="{{@colorOption == @color}}">selected</check>
                        {{@colorOption}}
                    </option>
                </repeat>
            </select>




            <input type="text" name="animal" value="{{@animal}}">


            <input type="text" name="name" value="{{@name}}">

            <input name="submit" type="submit">
        </form>
    </div>
</body>
</html>