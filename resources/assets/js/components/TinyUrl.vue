<script>
    export default {
        props: ['attributes'],


        data() {
            return {
                active: false,
            }
        },

        methods: {
            create() {
                var url = $(this.$el).find('input').val();
                var valid = url.match(/^(ht|f)tps?:\/\/[a-z0-9-\.]+\.[a-z]{2,4}\/?([^\s<>\#%"\,\{\}\\|\\\^\[\]`]+)?$/);
                if (valid !== null) {
                    axios.post('/tinyurl', {
                        url: url
                    }).then(function(response){
                        if (response.data.hasOwnProperty('error')) {
                            $('.jumbotron-md').find('#error-msg').text(response.data.error).show();
                        }
                        else {

                            var markup = '<tr>' +
                                '<td>' + response.data.url + '</td>' +
                                '<td>' + response.data.created_at + '</td>' +
                                '<td><a href="'+ response.data.tinyurl +'">' + response.data.tinyurl + '</a></td>' +
                                '<td>' + response.data.views + '</td>' +
                                '</tr>';

                            $('#url-results').find('tbody').append(markup);

                            $('#url-results').removeClass('hidden');

                        }
                    });

                }


                // this.editing = false;
            }
        }
    }
</script>