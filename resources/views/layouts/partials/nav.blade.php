<ul class="nav">
    @if(Auth::user()->hasRole(['System Admin']))
        <li class="nav-item ">
            <router-link class="nav-link" to="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
            </router-link>
        </li>
    @endif
    <li class="nav-item  active">
        <a class="nav-link" data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
        <i class="material-icons">image</i>
        <p> Accounts
            <b class="caret"></b>
        </p>
        </a>
        <div class="collapse show" id="pagesExamples">
        <ul class="nav">
            <li class="nav-item ">
            <router-link class="nav-link" to="/disbursements">
                <i class="material-icons">money</i>
                <p>Disbursement</p>
            </router-link>
            </li>
            <li class="nav-item ">
            <router-link class="nav-link" to="/payments">
                <i class="material-icons">payment</i>
                <p>Repayment</p>
            </router-link>
            </li>                
        </ul>
        </div>
    </li>
    <li class="nav-item">
        <router-link class="nav-link" to="/clients">
        <i class="material-icons">group</i>
        <p>Clients</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/branches">
        <i class="material-icons">merge_type</i>
        <p>Branches</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/disbursements">
        <i class="material-icons">money</i>
        <p>Disbursement</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/payments">
        <i class="material-icons">payment</i>
        <p>Repayment</p>
        </router-link>
    </li>
    <!-- <li class="nav-item ">
        <router-link class="nav-link" to="/payment_methods">
        <i class="material-icons">payment</i>
        <p>Payment Methods</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/registers">
        <i class="material-icons">book</i>
        <p>Registers</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="reports">
        <i class="material-icons">assessment</i>
        <p>Reports</p>
        </router-link>
    </li>  -->
    <li class="nav-item ">
        <router-link class="nav-link" to="/users">
        <i class="material-icons">people</i>
        <p>Users</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/reversals">
        <i class="material-icons">restore</i>
        <p>Reversals</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/profile">
        <i class="material-icons">person</i>
        <p>Profile</p>
        </router-link>
    </li>
    <li class="nav-item ">
        <router-link class="nav-link" to="/backup">
        <i class="material-icons">backup</i>
        <p>Back Up</p>
        </router-link>
    </li>   
</ul>