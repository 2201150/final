<?php
session_start();
?>
<?php
include '../../dbConfig.php';
$statusMsg = '';

// ファイルのアップロード先
$targetDir = "../../uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if($_POST['selectfolder']=== "フォルダ新規作成"){
$folder=$_POST['inputfolder'];
}else{
    $folder=$_POST['selectfolder'];
}

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // 特定のファイル形式の許可
    $allowTypes = array('jpg','png','jpeg','gif','pdf','mp3','m4a','aac','wav','flac');
    if(in_array($fileType, $allowTypes)){
        // サーバーにファイルをアップロード
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $insert = $pdo->query("INSERT into  Musicdetail(user_ID,category_ID,music_name,music_file,music_folder,music_detail,lyrics) VALUES ('".$_SESSION['user_id']."','".$_POST["selectBox"]."','".$_POST["musicname"]."','".$fileName."','".$folder."',  '".$_POST["musicdetail"]."','".$_POST["lyrics"]."' )");
            if($insert){
                $statusMsg = " ".$fileName. " が正常にアップロードされました";
            }else{
                $statusMsg = "ファイルのアップロードに失敗しました、もう一度お試しください";
            } 
        }else{
            $statusMsg = "ファイルのアップロードに失敗しました";
        }
    }else{
        $statusMsg = 'アップロード可能なファイルではありません';
    }
}else{
    $statusMsg = 'アップロードするファイルを選択してください';
}

// ステータスメッセージを表示
echo $statusMsg;
?>
<br>
<a href="../G1-1/main.php">戻る</a>