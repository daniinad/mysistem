<div class="col-lg-10 col-lg-offset-1 text-center">

                   
                    <form class="contact-form row" action="{{route('user.store')}}" method="post">
                     {{csrf_field()}}
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Name" name="nama" required="">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Phone" name="no" required="">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="9" placeholder="Your message here.." name="isi"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Kirim <i class="ion-android-arrow-forward"></i></button>
                        </div>
                        </form>
                        