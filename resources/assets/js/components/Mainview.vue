<template>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div> -->


        <div class="flex-center position-ref full-height">

            <!-- @include('layouts.navigation'); -->

            <div class="content">
                     <div class="title m-b-md">
                        Laravel Australia <br/>
<a class="typeform-share button" href="https://jai13.typeform.com/to/WvPecM" data-mode="popup" style="display:inline-block;text-decoration:none;background-color:#878FE0;color:white;cursor:pointer;font-family:Helvetica,Arial,sans-serif;font-size:22px;line-height:55px;text-align:center;margin:0;height:55px;padding:0px 36px;border-radius:0px;max-width:100%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;font-weight:bold;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;" target="_blank">Register for Laravel 101 </a>
                    </div>
            </div>

        </div>
</template>

<script>
    export default {
        created() {
                    let recaptchaScript = document.createElement('script')
                    recaptchaScript.onload = function(){
                         alert("jai");
                    };
                   // console.log( document.head.appendChild(recaptchaScript));
                   console.log(document.getElementsByClassName("typeform-share")[0]);
                  },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
