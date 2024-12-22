<?php
function upload_fun($file,$size,$exts,$path,$lang)
{
    $size_limit = $size * 1024 * 1024;
    if ($file['size'] <= $size_limit){
        $ext = explode ('.',$file['name']);
        $ext = end ( $ext );
        $ext = strtolower ( $ext );
        if(in_array( $ext,$exts)){
            if(file_exists($path)){
                $new = time().".".$ext;
                move_uploaded_file($file['tmp_name'], $path . $new);
                $message['en']="File has been uploaded";
                $message['ar']="تم رفع الملف بنجاح";
                $message['file']= $new;
            }else{
                $message['en']= "Upload folder not found";
                $message['ar']= "مجلد الرفع غير متاح";
            }
    }else{
        $message['en']= "File is not supported";
        $message['ar']= "صيغة الملف غبر مدعومة";
    }
}else{
    $message['en']= "File is bigger than $size MB";
    $message['ar']= "حجم الملف اكبر من $size ميجا بايت";
}
return $message;
}
?>