<?php 
class Comments extends Model{
/*
My logic behind this is that the post view should only display the comments.
This means that there should be a model for how to get comments, since they aren't posts
or anything else.  
Using a similar structure, we retrieve the comments from the database given a $pID 
(which is in both SQL tables)
Once it is found, it returns all of the comments from that
*/   
    function getComments($pID){
        $sql = 'SELECT commentText, comments.date, comments.uID 
                FROM comments, posts 
                WHERE comments.postID = ?
                ';
     
        $result = $this->db->getrow($sql, array($pID));
        
        $comments = $result;

        return $comments;

    }

    public function getDate($pID){
        $sql = 'SELECT comments.date FROM comments, posts
                WHERE comments.postID = ?';
    
        $result = $this->db->execture($sql, $pID);

        while ($row=$result->fetchrow()){
            $date[] = $row;
        }
        return $date;
    }

}



















}