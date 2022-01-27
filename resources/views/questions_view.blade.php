<!DOCTPE html>
<html>
<head>
    <title>View Questions Records</title>
</head>
<body>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;View Questions Records</h2>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Question</td>
        <td>answer_a</td>
        <td>answer_b</td>
        <td>answer_c</td>
    </tr>
    @foreach ($questions as $question)
        <tr>
            <td>{{ $question->id }}</td>
            <td>{{ $question->question }}</td>
            <td>{{ $question->answer_a }}</td>
            <td>{{ $question->answer_b }}</td>
            <td>{{ $question->answer_c }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>