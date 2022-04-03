<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="root">
            {{--<input type="text" v-model="coupon">--}}
            {{--<input type="text" :value="coupon" @input="coupon=$event.target.value">--}}
            <coupon1 v-model="coupon" />
        </div>

        <script src="https://unpkg.com/vue@2.1.8/dist/vue.js"></script>
        <script src="/js/app.js"></script>


    </body>
</html>
