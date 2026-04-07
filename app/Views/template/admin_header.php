<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>

<h2>Menu Admin</h2>
<hr>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #eef4ff;
        margin: 0;
    }

    h2, h3 {
        color: #1e3a8a;
    }

    .container {
        width: 90%;
        margin: 20px auto;
    }

    .top-bar {
        background: #2563eb;
        color: white;
        padding: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px 8px 0 0;
    }

    .top-bar a {
        background: #1e40af;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
    }

    .top-bar a:hover {
        background: #1e3a8a;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        border-radius: 0 0 8px 8px;
        overflow: hidden;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
    }

    th {
        background: #2563eb;
        color: white;
        padding: 12px;
        text-align: left;
    }

    td {
        padding: 12px;
    }

    tr:nth-child(even) {
        background: #f1f5ff;
    }

    tr:hover {
        background: #dbeafe;
    }

    .btn {
        padding: 6px 10px;
        text-decoration: none;
        background: #3b82f6;
        color: white;
        border-radius: 5px;
        font-size: 13px;
        margin-right: 5px;
    }

    .btn:hover {
        background: #2563eb;
    }

    .btn-danger {
        background: #ef4444;
    }

    .btn-danger:hover {
        background: #dc2626;
    }
</style>