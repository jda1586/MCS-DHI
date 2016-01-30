<head>
    <style>
        #content {
            position: relative;
        }
        #content img {
            position: absolute;
            top: 25px;
            right: 25px;
        }
        #content #cruz {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        #content #edit{
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }


    </style>
</head>
<body>
<header class="slidePanel-header overlay"  id="content"
        style="background-image: url({!! URL::asset('assets/images/fondo_dh_temp.jpg') !!}) !important; height: 200px; position: relative;">
    <img src="{!! URL::asset('assets/images/fondo_dh_temp.jpg') !!}" alt="..." style="width: 100px; height: 100px; border-radius: 50%;">
    <button type="button" class="btn btn-pure btn-inverse slidePanel-close icon md-close" id="cruz"
            aria-hidden="true"></button>

    <h3 style="color: white;">{{$user->name}}</h3>
    <h4 style="color: white;">{{$user->user}}</h4>
    <h4 style="color: white;">{{$user->email}}</h4>

    <button type="button" onclick="window.location='{{ url("admin/members/addcredit") }}'" class="edit btn btn-success btn-floating" data-toggle="edit" id="edit">
        <i class="icon md-edit animation-scale-up" aria-hidden="true"></i>
    </button>
</header>
<div style="padding: 25px;">
    <div class="slidePanel-inner">
        <table class="user-info">
            <tbody>
            <tr>
                <td class="info-label">Country:</td>
                <td>
                    <span>{!! \DHI\Country::where('id',$user->country_id)->first()->name !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Email:</td>
                <td>
                    <span>{!! $user->email !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Phone:</td>
                <td>
                    <span>{!! $user->phone !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Skype:</td>
                <td>
                    <span>{!! $user->phone !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Whatsapp:</td>
                <td>
                    <span>{!! $user->whatsapp !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Address:</td>
                <td>
                    <span>{!! $user->address !!}</span>
                </td>
            </tr>
            <tr>
                <td class="info-label">Sponsor:</td>
                <td>
                    <span>{!! \DHI\UserTree::where('user_id', $user->id)->first()->sponsor->user !!}</span>
                </td>
            </tr>

            </tbody>
        </table>


    </div>
</div>
</body>