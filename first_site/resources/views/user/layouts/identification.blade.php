
<script>

    let token = localStorage.getItem('manas_help_users_token')
    if (!token){
        post()
    }
    console.log(navigator.userAgent);
    function post()
    {
        let data = new FormData();
        data.append('device_name', navigator.userAgent)

        let url = "{{route('user.identification')}}";
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
                localStorage.setItem('manas_help_users_token', res.token)
            });
    }
</script>
