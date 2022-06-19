async function postDataJS(route, data, _token) {
    let response = await fetch(route,
        {
            method: "POST",
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
            },
            body: JSON.stringify({data, _token})
        });
    return await response.json();
}
