<?php
// ��������� ��� ����������� � MySQl
$config = array('hostname' => 'mysql.zzz.com.ua', 'username' => 'aaprofile', 'password' => 'Tasherqwe123', 'dbname' => 'aa_profile');

// ������������ � MySQL, ���� �� ����� �� �������
if (!mysql_connect($config['hostname'], $config['username'], $config['password'])) {
    exit();
}
// �������� ���� ������, ���� �� ����� �� �������
if (!mysql_select_db($config['dbname'])) {
    exit();
}
mysql_query("SET NAMES 'utf8'"); // ������� MySQl'� �� ��� �� ����� �������� � UTF-8

Header("Cache-Control: no-cache, must-revalidate"); // ������� �������� ���-�� �� �� ��������� ��� ��������
Header("Pragma: no-cache");

Header("Content-Type: text/javascript; charset=utf-8"); // ������� �������� ��� ��� javascript � ��������� UTF-8

// ��������� ���� �� ���������� act (send ��� load), ������� ��������� ��� ��� ������
if (isset($_POST['act'])) {
    // $_POST['act'] - ����������
    switch ($_POST['act']) {
        case "send" : // ���� ��� ��������� send, �������� ������� Send()
            Send();
            break;
        case "load" : // ���� ��� ��������� load, �������� ������� Load()
            Load();
            break;
        default : // ���� �� ���� � �� �������  - �������
            exit();
    }
}

// ������� ��������� ���������� ��������� � ���� ������
function Send()
{
    // ��� �� �������� ��� ���������� ���������� ����� java-�������� ��� ������ ajax
    // ���:  $_POST['name'] - ��� ������������
    // � $_POST['text'] - ���������

    $name = substr($_POST['name'], 0, 200); // �������� �� 200 ��������
    $name = htmlspecialchars($name); // �������� ������� ���� (<h1>,<br>, � ������) �� ����������
    $name = mysql_real_escape_string($name); // ������� ���������� ��� ����-������� � unescaped_string , ���������� ����, � ����� ��������� ������������ � mysql_query()

    $text = substr($_POST['text'], 0, 200); // �������� �� 200 ��������
    $text = htmlspecialchars($text); // �������� ������� ���� (<h1>,<br>, � ������) �� ����������
    $text = mysql_real_escape_string($text); // ������� ���������� ��� ����-������� � unescaped_string , ���������� ����, � ����� ��������� ������������ � mysql_query()

    // ��������� ����� ������ � ������� messages
    mysql_query("INSERT INTO messages (name,text) VALUES ('" . $name . "', '" . $text . "')");
    }



    // ������� ��������� �������� ��������� �� ���� ������ � �������� �� ������������ ����� ajax ���� java-�������
    function Load()
    {
    // ��� �� �������� ���������� ���������� ����� java-�������� ��� ������ ajax
    // ���:  $_POST['last'] - ����� ���������� ��������� ������� ����������� � ������������

    $last_message_id = intval($_POST['last']); // ���������� ����� �������� ����������

    // ��������� ������ � ���� ������ ��� ��������� 10 ��������� ��������� ��������� � ������� ������� ��� $last_message_id
    $query = mysql_query("SELECT * FROM messages WHERE ( id > $last_message_id ) ORDER BY id DESC LIMIT 10");

    // ��������� ���� �� �����-������ ����� ���������
    if (mysql_num_rows($query) > 0) {
    // �������� ����������� javascript ������� �� ��������� �������
    $js = 'var chat = $(".chat-body");'; // �������� "���������" �� div, � ������� �� ������� ����� ���������

    // ��������� ������������ �� �������� ������ ��������� �� ������ �������
    $messages = array();
    while ($row = mysql_fetch_array($query)) {
    $messages[] = $row;
    }

    // ���������� ����� ���������� ���������
    // [0] - ��� ����� ��� ������ ������� � ������� $messages, �� ��� ��� �� ��������� ������ � ���������� "DESC" (� �������� �������),
    // �� ��� ���������� ����� ���������� ��������� � ���� ������
    $last_message_id = $messages[0]['id'];

    // �������������� ������ (������ �� � ���������� �������)
    $messages = array_reverse($messages);

    // ��� �� ���� ��������� ������� $messages
    foreach ($messages as $value) {
    // ���������� ����������� ������ ��� �������� ������������
    $js .= 'chat.append("<div class=message><div class=title-chat><span class=name>' . $value['name'] . '</span><span class=time>' . $value['time'] . '</span></div><p>' . $value['text'] . '</p></div>");'; // �������� �������� (<span>��� &raquo; ����� ���������</span>) � ��� div
    }

    $js .= "last_message_id = $last_message_id;"; // ������� ����� ���������� ����������� ���������, ��� �� � ��������� ��� ������ �������� � ����� ���������

    // ���������� ���������� ��� ������������, ��� �� ����� �������� ��� ������ ������� eval()
    echo $js;
    }
}

?>