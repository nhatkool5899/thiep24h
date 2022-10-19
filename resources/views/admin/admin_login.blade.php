<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('back-end/css/main.css')}}">
</head>
<body style=" background: url(back-end/imgs/bg-2.jpg);background-size:50%">
    <div class="modal-login">
        <div class="modal-sign">
            <div class="modal-inner">
                <section class="check-login"><!--form-->
                    <div class="container-sign">
                        <div class="primary-bg">
                            <div class="image">
                                <img style="width: 100%" src="{{asset('front-end/imgs/drinks/pd-demo-1.png')}}" alt="">
                                <div>Angel A&D</div>
                            </div>
                        </div>
                        <div class="formBx">
                
                            <div class="form signupForm">
                                <form action="{{url('auth/angelad/admin/login')}}" method="POST">
                                    @csrf
                                    <h4>
                                        <span>
                                            Quản trị Angel A&D 
                                        </span>
                                        <img src="{{asset('back-end/imgs/logo-1.png')}}" alt="">
                                    </h4>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email"  placeholder="Email..." required/>
                                        @if (session('error'))
                                        <div class="message-error"><span><ion-icon name="alert-circle-outline"></ion-icon></span>Email hoặc Password bạn nhập không hợp lệ</div>
                                        @endif
                                    </div>
                                    <div class="form-group inputBox">
                                        <label for="">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Password..."/>
                                        <span id="toggleBtn"></span>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="form-submit btn-login">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section><!--/form-->
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script type="text/javascript">
    let pw = document.getElementById('password');
    let toggleBtn = document.getElementById('toggleBtn');

    toggleBtn.onclick = function(){
        if(pw.type === 'password'){
            pw.setAttribute('type','text');
            toggleBtn.classList.add('hide');
        }else{
            pw.setAttribute('type','password');
            toggleBtn.classList.remove('hide');
        }
    }
</script>
</body>
</html>