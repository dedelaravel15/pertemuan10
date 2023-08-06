<div class="auth-box bg-dark border-top border-secondary">
    <div>
      <div class="text-center pt-3 pb-3">
        <span class="db"
          ><img src="{{asset('/assets/images/logo.png')}}" alt="logo"
        /></span>
      </div>
      <form class="form-horizontal mt-3" action="{{route('signup')}}" method="POST">
        @csrf
        <div class="row pb-4">
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span
                  class="input-group-text bg-success text-white h-100"
                  id="basic-addon1"
                  ><i class="mdi mdi-account fs-4"></i
                ></span>
              </div>
              <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Username"
                aria-label="Username"
                aria-describedby="basic-addon1"
                required
                name="name"
              />
              @error('name')
              <p style="color:white;">{{$message}}</p>
            @enderror
            </div>
            <!-- email -->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span
                  class="input-group-text bg-danger text-white h-100"
                  id="basic-addon1"
                  ><i class="mdi mdi-email fs-4"></i
                ></span>
              </div>
              <input
                type="text"
                class="form-control form-control-lg"
                placeholder="Email Address"
                aria-label="Username"
                aria-describedby="basic-addon1"
                name="email"
                required
              />
              @error('email')
              <p style="color:white;">{{$message}}</p>
            @enderror
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span
                  class="input-group-text bg-warning text-white h-100"
                  id="basic-addon2"
                  ><i class="mdi mdi-lock fs-4"></i
                ></span>
              </div>
              <input
                type="password"
                class="form-control form-control-lg"
                placeholder="Password"
                aria-label="Password"
                aria-describedby="basic-addon1"
                name="password"
                required
              />
            </div>
            @error('password')
            <p style="color:white;">{{$message}}</p>
          @enderror
            </div>
          </div>
        </div>

        <div class="row border-top border-secondary">
          <div class="col-12">
            <div class="form-group">
              <div class="pt-3 d-grid">
                <button
                  class="btn btn-block btn-lg btn-info"
                  type="submit"
                >
                  Sign Up
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
