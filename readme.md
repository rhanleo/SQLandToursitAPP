<h1 align="center">SQL and Tourust APP</h1>
<br>
<br>
<br>
<h4>Documentation how to setup in local</h4>

<p>1). Create DB  named "tourist_app"</p>
<p>2). import DB from folder "/database/tourist_app.sql"</p>
<p>3). config DB credentials in '.env' file based on your local DB credentials</p>
<p>4). Open cmd in the root folder</p>
<p>5). run command "php artisan serve"</p>
<p>now you can access this url 'http://127.0.0.1:8000/'</p>
<ul>
          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-map-marker-alt"></i>
              <p>
                JAPAN FAVORITES
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('main')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CITIES </p>
                </a>
              </li>
              
            </ul>
          </li>
		  
		   <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
			<i class="fas fa-database"></i>
              <p>
                SQL TEST 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sql-first')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TEST 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('sql-secont')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TEST 2</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        </ul>
<p>Good bless!!</p>
 <p>Note: if got an error please run command "composer dump-autoload" </p>



