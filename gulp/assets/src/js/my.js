
$.typeahead({
    input: '.js-typeahead-input',
    minLength: 3,
    order: "asc",
    dynamic: false,//true,
    delay: 500,
    //href: "jquerytypeahead.json22",
    backdrop: {
        "background-color": "#fff"
    },
    template: function (query, item) {
        return '<span class="row">' +
            '<small style="color:#14790f">({{id}})</small>&nbsp;<span class="serchbrandname"><big> {{name}}</big></span>' +
            '&nbsp;<small style="color:#062c33">{{patch}}</small>' +
            "</span>"
    },
    emptyTemplate: "no result for {{query}}",
    source: {
        name: {
            display: "name",
            /*href: "jquerytypeahead.json33",
            data: [{
                "id": 0,
                "name": ""
            }],*/
            ajax: function (query) {
                return {
                    type: "POST",
                    url:  window.wp_data.ajax_playerfind_url,
                    path: "data.brand",
                    data: {
                        q: "{{query}}"
                    },
                    callback: {
                        done: function (data) {
                            return data;
                        }
                    }
                }
            }

        },
    },
    callback: {
        onClick: function (node, a, item, event) {
            $("input[name=cat_name]").val(item.name);
            $("input[name=cat_id]").val(item.id);
        },
    },
    debug: true
});