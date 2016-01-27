@extends('layouts.main')

@section('head_scripts')

    {{--<link rel="stylesheet" href="/assets/css/Treant.css">--}}
    {{--<link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">--}}
    {{--archivos para el arbol--}}
    {{--<script src="/assets/js/jquery.min.js"></script>--}}
    {{--<script src="/assets/js/Treant.js"></script>--}}
    {{--<script src="/assets/js/jquery.easing.js"></script>--}}
    {{--<script src="/assets/js/raphael.js"></script>--}}
    {{--<script src="/assets/js/Treant.min.js"></script>--}}
    {{--<script src="/assets/js/jquery.mousewheel.js"></script>--}}
    {{--<script src="/assets/js/perfect-scrollbar.js"></script>--}}

    {{--<style>--}}
        {{--#button {--}}
            {{--position:absolute;--}}
            {{--bottom: -20px;--}}
            {{--right: 20px;--}}
        {{--}--}}
    {{--</style>--}}

    <link rel="stylesheet" type="text/css" href="/assets/BinaryTree SourceCode/binarytree.css">
    <script src="/assets/BinaryTree SourceCode/jquery-1.12.0.min.js"></script>
    <script src="/assets/BinaryTree SourceCode/binarytree.js"></script>
    <script>
        //Order by parent id asc
        //The left members first
        //Just the first and second name
        //Position: 1=left; 2=right
        //0 = top binary tree
        //type: 1=gold, 2=silver, 3=bronze
        var members = [
            {memberId : 1, parentId:0, position: 1, name: 'Pedro Tompson', initialDate:"29/05/2015", enroller:"Gabriel Arnaldo", type: 1, img: "user-image.png", NumMembersDown: 0},
            {memberId : 2, parentId:1, position: 2, name: 'Marta Marieta', initialDate:"12/01/2015", enroller:"Silvia Matias", type: 1, img: "user-image.png", NumMembersDown: 3},
            {memberId : 3, parentId:1, position: 1, name: 'Agnaldo Arstrides', initialDate:"08/12/2015", enroller:"Augusto Martins", type: 2, img: "user-image.png", NumMembersDown: 4},
            {memberId : 4, parentId:2, position: 2, name: 'Ferdinando Mureta', initialDate:"17/03/2015", enroller:"Gabriel Arnaldo", type: 3, img: "user-image.png", NumMembersDown: 5},
            {memberId : 5, parentId:4, position: 1, name: 'Marcos Verne', initialDate:"30/08/2015", enroller:"Flávio Mercedez", type: 2, img: "user-image.png", NumMembersDown: 6},
            // {memberId : 6, parentId:4, position: 2, name: 'Ariano Suassuna', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 7},
            // {memberId : 7, parentId:3, position: 2, name: 'Marcela Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 8},
            // {memberId : 8, parentId:3, position: 1, name: 'Amanda Braga', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 9},
            // {memberId : 9, parentId:8, position: 1, name: 'Claudenir Santana', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 10},
            // {memberId : 10, parentId:9, position: 1, name: 'Naye Nidie', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 7},
            // {memberId : 11, parentId:9, position: 2, name: 'Jack Wilbert', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 1, img: "user-image.png", NumMembersDown: 3},
            // {memberId : 13, parentId:6, position: 1, name: 'Juliano Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 12},
            // {memberId : 14, parentId:7, position: 1, name: 'Felipe Nestorsss', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 15},
            // {memberId : 15, parentId:7, position: 2, name: 'Katia Napaline', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 16},
            // {memberId : 16, parentId:15, position: 2, name: 'Maria Nunes', initialDate:"01/12/2015", enroller:"Julia Antonia", type: 3, img: "user-image.png", NumMembersDown: 4},
            // {memberId : 17, parentId:2, position: 1, name: 'Julia Luna', initialDate:"30/01/2016", enroller:"Silvia Matias", type: 1, img: "user-image.png", NumMembersDown: 3}
            //
        ];

        treeAllowEnroll = true; // ---> Case are you viewing a internal member set false
        treeLanguage = "en"; //pt-br, es, en
        treeShowDownNumbersLevels = false;
    </script>


@endsection

@section('content')
    <div class="col-md-12">
        <h1>Binary Tree</h1>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <h3 style="padding: 10px 25px;">Weight of left side: </h3>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel">
            <h3 style="padding: 10px 25px;">Weight of right side: </h3>
        </div>
    </div>
    {{--<div class="col-md-2"></div>--}}
    <div class="col-md-12">
        <div class="col-md-12 tree panel">
            {{----}}
            <div class="linkSeeMyPosition">
                <a href='http://www.testpage.com/thispage.php?memberToView=<?=VariablePhpWithSessionMemberIdOrTheFirst?>' ><script>document.write(txtSeeMyPosition);</script></a>
            </div>
            <div id="mainTreeContainer" >

                <input type="hidden" name="currentSessionMemberId" value="<?=VariablePhpWithSessionMemberIdOrTheFirst?>">


                <div class="treePointsLeft">
                    <span class="descriptionTreePoints"><script> document.write(txtLeft); </script><br/></span>
                    5000<!--VariablePHPLeftPoints-->
                </div>

                <div class="treePointsRight">
                    <span class="descriptionTreePoints"><script> document.write(txtRight); </script><br/></span>
                    8000<!--VariablePHPRightPoints-->
                </div>
                <!--Line1-->
                <div class="line">
                    <div class="itemCard" id="card-1">

                    </div>

                    <div class="treeLineDown">
                    </div>

                </div>

                <!--Line2-->
                <div class="line clearfix">
                    <div class="line2-part">
                        <div class="treeLineUpLeft">
                        </div>
                        <div class="itemCard" rel="allowEnroll" id="card-1-1">

                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                    <div class="line2-part">
                        <div class="treeLineUpRight">
                        </div>
                        <div class="itemCard" rel="allowEnroll" id="card-1-2">
                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                </div>

                <!--Line3-->
                <div class="line clearfix">
                    <div class="line3-part">
                        <div class="treeLineUpLeft">
                        </div>
                        <div class="itemCard" rel="allowEnroll" id="card-1-1-1">
                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                    <div class="line3-part">
                        <div class="treeLineUpRight">
                        </div>
                        <div class="itemCard" id="card-1-1-2">
                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                    <div class="line3-part">
                        <div class="treeLineUpLeft">
                        </div>
                        <div class="itemCard " id="card-1-2-1">
                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                    <div class="line3-part">
                        <div class="treeLineUpRight">
                        </div>
                        <div class="itemCard" rel="allowEnroll" id="card-1-2-2">
                        </div>
                        <div class="treeLineDown">
                        </div>
                    </div>
                </div>

                <!--Line4-->
                <div class="line clearfix">
                    <div class="line2-part">
                        <div class="line4-part">
                            <div class="treeLineUpLeft">
                            </div>
                            <div class="itemCard" rel="allowEnroll" id="card-1-1-1-1">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpRight">
                            </div>
                            <div class="itemCard" id="card-1-1-1-2">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpLeft">
                            </div>
                            <div class="itemCard" id="card-1-1-2-1">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpRight">
                            </div>
                            <div class="itemCard" id="card-1-1-2-2">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                    </div>
                    <div class="line2-part">

                        <div class="line4-part">
                            <div class="treeLineUpLeft">
                            </div>
                            <div class="itemCard" id="card-1-2-1-1">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpRight">
                            </div>
                            <div class="itemCard" id="card-1-2-1-2">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpLeft">
                            </div>
                            <div class="itemCard" id="card-1-2-2-1">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                        <div class="line4-part">
                            <div class="treeLineUpRight">
                            </div>
                            <div class="itemCard" rel="allowEnroll" id="card-1-2-2-2">
                            </div>
                            <div class="treeLineDown">
                            </div>
                        </div>
                    </div>
                </div>


                <!--Line5-->
                <div class="line clearfix">
                    <div class="line2-part">
                        <div class="line2-part">
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" rel="allowEnroll" id="card-1-1-1-1-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-1-1-1-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-1-1-2-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-1-1-2-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="line2-part">
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-1-2-1-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-1-2-1-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-1-2-2-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-1-2-2-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="line2-part">
                        <div class="line2-part">
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-2-1-1-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-2-1-1-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-2-1-2-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-2-1-2-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="line2-part">
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-2-2-1-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" id="card-1-2-2-1-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpLeft">
                                </div>
                                <div class="itemCard" id="card-1-2-2-2-1">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems ">
                                    0
                                </div>
                            </div>
                            <div class="line5-part">
                                <div class="treeLineUpRight">
                                </div>
                                <div class="itemCard" rel="allowEnroll" id="card-1-2-2-2-2">
                                </div>
                                <div class="treeLineDown treeMIL">
                                </div>
                                <div class="treeMoreItems">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    &nbsp;
                </div>

                <div class="linksButtonBottom">
                    <a href='http://www.testpage.com/thispage.php?currentMemberId=<?=CurrentMemberId?>&memberToView=<?=VariablePhpWithSessionMemberIdOrTheFirst?>' class="lnkLeft"><script>document.write(txtSeeTheLastLeftMember);</script></a>
                    <a href='http://www.testpage.com/thispage.php?currentMemberId=<?=CurrentMemberId?>&memberToView=<?=VariablePhpWithSessionMemberIdOrTheFirst?>' class="lnkRight"><script>document.write(txtSeeTheLastRightMember);</script></a>
                </div>

            </div>
            {{----}}
        <div class="col-md-12">
            <button class="btn btn-floating btn-info  waves-light" type="button" id="button"
                    style="top: -10px;" onclick="window.location ='{{ route("members.register") }}'"><i class="icon md-plus" aria-hidden="true"></i></button>
        </div>
    </div>

    {{--<div class="col-md-2"></div>--}}

    {{--<script>--}}
        {{--var simple_chart_config = {--}}
            {{--chart: {--}}
                {{--container: "#tree-simple",--}}
                {{--rootOrientation: "NORTH",--}}
                {{--hideRootNode: false,--}}
                {{--nodeAlign: 'center',--}}
{{--//                scrollbar: "fancy",--}}
                {{--levelSeparation: 20,--}}
                {{--siblingSeparation: 10,--}}
                {{--padding: 30,--}}
                {{--subTeeSeparation: 30,--}}
                {{--connectors: {--}}
                    {{--type: 'bCurve',--}}
                    {{--style: {--}}
                        {{--stroke: 'blue'--}}
                    {{--}--}}
                {{--},--}}
                {{--node: {--}}
                    {{--collapsable: true--}}
                {{--}--}}
            {{--},--}}

            {{--nodeStructure: {--}}
                {{--text: {--}}
                    {{--contact: {--}}
                        {{--val: "Kate Upton",--}}
                        {{--href: "http://kateupton.com/",--}}
                        {{--target: "_blanck"--}}
                    {{--}--}}
                {{--},--}}
                {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                {{--collapsed: false,--}}
                {{--children: [--}}
                    {{--{--}}
                        {{--text: {--}}
                            {{--contact: {--}}
                                {{--val: "Kate Upton",--}}
                                {{--href: "http://kateupton.com/",--}}
                                {{--target: "_blanck"--}}
                            {{--}--}}
                        {{--},--}}
                        {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                        {{--collapsed: true,--}}
                        {{--children: [--}}
                            {{--{--}}
                                {{--text: {--}}
                                    {{--contact: {--}}
                                        {{--val: "Kate Upton",--}}
                                        {{--href: "http://kateupton.com/",--}}
                                        {{--target: "_blanck"--}}
                                    {{--}--}}
                                {{--},--}}
                                {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                                {{--collapsed: true--}}
                            {{--},--}}
                            {{--{--}}
                                {{--text: {--}}
                                    {{--contact: {--}}
                                        {{--val: "Kate Upton",--}}
                                        {{--href: "http://kateupton.com/",--}}
                                        {{--target: "_blanck"--}}
                                    {{--}--}}
                                {{--},--}}
                                {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                                {{--collapsed: true--}}
                            {{--}--}}
                        {{--]--}}
                    {{--},--}}
                    {{--{--}}
                        {{--text: {--}}
                            {{--contact: {--}}
                                {{--val: "Kate Upton",--}}
                                {{--href: "http://kateupton.com/",--}}
                                {{--target: "_blanck"--}}
                            {{--}--}}
                        {{--},--}}
                        {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                        {{--collapsed: true,--}}
                        {{--children: [--}}
                            {{--{--}}
                                {{--text: {--}}
                                    {{--contact: {--}}
                                        {{--val: "Kate Upton",--}}
                                        {{--href: "http://kateupton.com/",--}}
                                        {{--target: "_blanck"--}}
                                    {{--}--}}
                                {{--},--}}
                                {{--image: '{{ URL::to('/assets/images/logos/avatar.png') }}',--}}
                                {{--collapsed: true--}}
                            {{--}--}}
                        {{--]--}}
                    {{--}--}}
                {{--]--}}
            {{--}--}}
        {{--};--}}

        {{--var my_chart = new Treant(simple_chart_config);--}}

    {{--</script>--}}
    <style type="text/css">
        .tree .node p {
            font-size: 20px;
            line-height: 20px;
            height: 20px;
            font-weight: bold;
            padding: 3px;
            margin: 0;
            font-family: none;
            text-align: center;
        }

        .tree .node {
            width: 120px;
            height: 120px;
        }

        .tree .node img {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            right: 10px;
        }

        .tree .Treant .collapse-switch {
            width: 90px;
            height: 89px;
            display: block;
            /* border: 1px solid black; */
            position: absolute;
            top: 0px;
            right: 29px;
            cursor: pointer;
            border-radius: 50%;
        }

        .tree .node a {
            color: black;
            text-decoration: none;
            text-align: right;
            text-transform: capitalize;

        }

        .tree a:link {
            font-size: 20px;
        }
    </style>
@endsection