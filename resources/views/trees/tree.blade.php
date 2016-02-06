<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/BinaryTree SourceCode/binarytree.css">
    <script src="/assets/BinaryTree SourceCode/jquery-1.12.0.min.js"></script>
    <script src="/assets/BinaryTree SourceCode/binarytree.js"></script>
    <title>Dream House | Binary Tree</title>

    <script>
        //Order by parent id asc
        //The left members first
        //Just the first and second name
        //Position: 1=left; 2=right
        //0 = top binary tree
        //type: 1=gold, 2=silver, 3=bronze
        var members = [];

        @foreach($children as $child)
        members.push(JSON.parse('{!! $child !!}'));
        @endforeach

        treeAllowEnroll = true; // ---> Case are you viewing a internal member set false
        treeLanguage = "en"; //pt-br, es, en
        treeShowDownNumbersLevels = false;
    </script>

</head>
<body>
<div class="linkSeeMyPosition">
    <a href='http://www.testpage.com/thispage.php?memberToView=<?=$VariablePhpWithSessionMemberIdOrTheFirst = 0?>'>
        <script>document.write(txtSeeMyPosition);</script>
    </a>
</div>
<div id="mainTreeContainer">
    <input type="hidden" name="currentSessionMemberId" value="<?=$VariablePhpWithSessionMemberIdOrTheFirst?>">
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
        <a href='http://www.testpage.com/thispage.php?currentMemberId=<?=$CurrentMemberId = 0?>&memberToView=<?=$VariablePhpWithSessionMemberIdOrTheFirst?>'
           class="lnkLeft">
            <script>document.write(txtSeeTheLastLeftMember);</script>
        </a>
        <a href='http://www.testpage.com/thispage.php?currentMemberId=<?=$CurrentMemberId?>&memberToView=<?=$VariablePhpWithSessionMemberIdOrTheFirst?>'
           class="lnkRight">
            <script>document.write(txtSeeTheLastRightMember);</script>
        </a>
    </div>
</div>
</body>
</html>