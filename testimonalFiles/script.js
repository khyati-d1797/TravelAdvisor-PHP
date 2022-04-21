var mainURL = window.location.origin + "/" + window.location.pathname + "/";

var testimonialApp = new Vue({
    el: "#testimonialApp",
    data: {
        testimonials: []
    },
    methods: {
        loadMoreContent: function () {
            var node = event.target;
            var index = node.getAttribute("data-index");

            if (this.testimonials[index].comment.length > 50) {
                // it needs to display less
                node.innerHTML = "show more";
                this.testimonials[index].comment = this.testimonials[index].comment_full.substr(0, 50);
            } else {
                // it needs to display more
                node.innerHTML = "show less";
                this.testimonials[index].comment = this.testimonials[index].comment_full;
            }
        },

        getData: function () {
            // get this app instance
            var self = this;
         
            // call an AJAX to get all testimonials
            var ajax = new XMLHttpRequest();
            ajax.open("POST", "fetch.php", true);
         
            ajax.onreadystatechange = function () {
                if (this.readyState == 4) { // response received
                    if (this.status == 200) { // response is successfull
                        // console.log(this.responseText);
         
                        // parse the response from JSON string to JS arrays and objects
                        var response = JSON.parse(this.responseText);
                        // console.log(response);
         
                        // if there is no error
                        if (response.status == "success") {
                            self.testimonials = response.data;

                            setTimeout(function () {
                                $('.items').slick({
                                    dots: true,
                                    infinite: true,
                                    speed: 800,
                                    autoplay: false,
                                    slidesToShow: 2,
                                    slidesToScroll: 2,
                                    responsive: [{
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 3,
                                                slidesToScroll: 3,
                                                infinite: true,
                                                dots: true
                                            }
                                        }, {
                                            breakpoint: 600,
                                            settings: {
                                                slidesToShow: 2,
                                                slidesToScroll: 2
                                            }
                                        }, {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                slidesToScroll: 1
                                            }
                                        }
                                    ]
                                });
                            }, 100);
                        } else {
                            // when there is any error
                        }
                    }
         
                    if (this.status == 500) {
                        console.log(this.responseText);
                    }
                }
            };
         
            // create form data object
            var formData = new FormData();
         
            // actually sending the request
            ajax.send(formData);
        }
    },
    mounted: function () {
        this.getData();
    }
});