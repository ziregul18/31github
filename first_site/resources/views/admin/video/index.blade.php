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
<div>
    <input type="text" id="name">
    <input type="number" id="number">
    <input type="file" id="video">
    <button onclick="clickButton()">submit</button>
</div>

<script>
    function clickButton()
    {
        let name = document.getElementById('name');
        let number = document.getElementById('number');
        let video = document.getElementById('video');
        console.log(video.files[0])
        let data = new FormData();
        data.append('name', name.value);
        data.append('number', number.value);
        data.append('video', video.files[0]);
        post(data);
    }

    function post(data)
    {
        let url = "{{route('admin.video.index')}}";
        console.log("{{csrf_token()}}");
        fetch(url, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            body: data

        })
            .then(response => response.json())
            .then(res => {
                console.log(res);
            });
    }
</script>
</body>
</html>
