function Service(api) {
    this.method = {
        GET: 'POST',
        POST: 'POST',
        PUT: 'PUT',
        DEL: 'DELETE'
    };

    var context = this;

    this.api = BASE_URL + api;
    this.service = function (type, url, data) {
        return new Promise(function (resolve, reject) {
            var options = {
                url: url,
                type: type,
                contentType: 'application/json',
                success: function (response) {
                    resolve(response);
                },
                error: function (err) {
                    reject(err);
                }
            };

            if (type === context.method.POST || type === context.method.PUT)
                options = Object.assign(options, {data: data});

            $.ajax(options);
        });
    }

    this.save = function (body, param) {
        var api = this.api;
        if (!_.isEmpty(param) && typeof param === 'string')
            api = api + '/' + param;

        return this.service(this.method.POST, api, body);
    };

    this.find = function (param) {
        var api = this.api;
        if (!_.isEmpty(param) && typeof param === 'string')
            api = api + '/' + param;

        return this.service(this.method.GET, api);
    };
}

