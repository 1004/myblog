<?php
/**
 * SQL����ִ����
 *
 * @version        $Id: sys_sql_query.php 1 22:28 2010��7��20��Z tianya $
 * @package        DedeCMS.Administrator
 * @copyright      Copyright (c) 2007 - 2010, DesDev, Inc.
 * @license        http://help.dedecms.com/usersguide/license.html
 * @link           http://www.dedecms.com
 */
require(dirname(__FILE__)."/config.php");
CheckPurview('sys_Data');
if(empty($dopost)) $dopost = "";

//�鿴���ṹ
if($dopost=="viewinfo")
{
    csrf_check();
    if(empty($tablename))
    {
        echo "û��ָ��������";
    }
    else
    {
        $dsql->SetQuery("SHOW CREATE TABLE ".$dsql->dbName.".".$tablename);
        $dsql->Execute('me');
        $row2 = $dsql->GetArray('me',MYSQL_BOTH);
        $ctinfo = $row2[1];
        echo "<xmp>".trim($ctinfo)."</xmp>";
    }
    exit();
}
//�Ż���
else if($dopost=="opimize")
{
    csrf_check();
    if(empty($tablename))
    {
        echo "û��ָ��������";
    }
    else
    {
        $rs = $dsql->ExecuteNoneQuery("OPTIMIZE TABLE `$tablename` ");
        if($rs)  echo "ִ���Ż����� $tablename  OK��";
        else echo "ִ���Ż����� $tablename  ʧ�ܣ�ԭ���ǣ�".$dsql->GetError();
    }
    exit();
}
//�Ż�ȫ����
else if($dopost=="opimizeAll")
{
    csrf_check();
    $dsql->SetQuery("SHOW TABLES");
    $dsql->Execute('t');
    while($row = $dsql->GetArray('t',MYSQL_BOTH))
    {
        $rs = $dsql->ExecuteNoneQuery("OPTIMIZE TABLE `{$row[0]}` ");
        if($rs) 
        {
            echo "�Ż���: {$row[0]} ok!<br />\r\n";
        } else {
            echo "�Ż���: {$row[0]} ʧ��! ԭ����: ".$dsql->GetError()."<br />\r\n";
        }
    }
    exit();
}
//�޸���
else if($dopost=="repair")
{
    csrf_check();
    if(empty($tablename))
    {
        echo "û��ָ��������";
    }
    else
    {
        $rs = $dsql->ExecuteNoneQuery("REPAIR TABLE `$tablename` ");
        if($rs) echo "�޸����� $tablename  OK��";
        else echo "�޸����� $tablename  ʧ�ܣ�ԭ���ǣ�".$dsql->GetError();
    }
    exit();
}
//�޸�ȫ����
else if($dopost=="repairAll")
{
    csrf_check();
    $dsql->SetQuery("Show Tables");
    $dsql->Execute('t');
    while($row = $dsql->GetArray('t',MYSQL_BOTH))
    {
        $rs = $dsql->ExecuteNoneQuery("REPAIR TABLE `{$row[0]}` ");
        if($rs) 
        {
            echo "�޸���: {$row[0]} ok!<br />\r\n";
        } else {
            echo "�޸���: {$row[0]} ʧ��! ԭ����: ".$dsql->GetError()."<br />\r\n";
        }
    }
    exit();
}
//ִ��SQL���
else if($dopost=="query")
{
    csrf_check();
    $sqlquery = trim(stripslashes($sqlquery));
    if(preg_match("#drop(.*)table#i", $sqlquery) || preg_match("#drop(.*)database#", $sqlquery))
    {
        echo "<span style='font-size:10pt'>ɾ��'���ݱ�'��'���ݿ�'����䲻����������ִ�С�</span>";
        exit();
    }
    //���в�ѯ���
    if(preg_match("#^select #i", $sqlquery))
    {
        $dsql->SetQuery($sqlquery);
        $dsql->Execute();
        if($dsql->GetTotalRow()<=0)
        {
            echo "����SQL��{$sqlquery}���޷��ؼ�¼��";
        }
        else
        {
            echo "����SQL��{$sqlquery}������".$dsql->GetTotalRow()."����¼����󷵻�100����";
        }
        $j = 0;
        while($row = $dsql->GetArray())
        {
            $j++;
            if($j > 100)
            {
                break;
            }
            echo "<hr size=1 width='100%'/>";
            echo "��¼��$j";
            echo "<hr size=1 width='100%'/>";
            foreach($row as $k=>$v)
            {
                echo "<font color='red'>{$k}��</font>{$v}<br/>\r\n";
            }
        }
        exit();
    }
    if($querytype==2)
    {
        //��ͨ��SQL���
        $sqlquery = str_replace("\r","",$sqlquery);
        $sqls = preg_split("#;[ \t]{0,}\n#",$sqlquery);
        $nerrCode = ""; $i=0;
        foreach($sqls as $q)
        {
            $q = trim($q);
            if($q=="")
            {
                continue;
            }
            $dsql->ExecuteNoneQuery($q);
            $errCode = trim($dsql->GetError());
            if($errCode=="")
            {
                $i++;
            }
            else
            {
                $nerrCode .= "ִ�У� <font color='blue'>$q</font> ������������ʾ��<font color='red'>".$errCode."</font><br>";
            }
        }
        echo "�ɹ�ִ��{$i}��SQL��䣡<br><br>";
        echo $nerrCode;
    }
    else
    {
        $dsql->ExecuteNoneQuery($sqlquery);
        $nerrCode = trim($dsql->GetError());
        echo "�ɹ�ִ��1��SQL��䣡<br><br>";
        echo $nerrCode;
    }
    exit();
}
make_hash();
include DedeInclude('templets/sys_sql_query.htm');