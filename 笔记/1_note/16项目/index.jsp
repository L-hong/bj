<%@page language="java" contentType="text/html;charset=GBK"%>
<%@page import="java.util.*"%>
<%
	Date dnow = new Date();
	int dhours = dnow.getHours();
	int dminutes = dnow.getMinutes();
	int dseconds = dnow.getSeconds();
          out.print("web54-57������ʱ�䣺" + dhours + ":" + dminutes + ":" + dseconds);
%>

<SCRIPT LANGUAGE="JavaScript">
	var dnow = new Date();
	dhours = dnow.getHours();
	dminutes = dnow.getMinutes();
	dseconds = dnow.getSeconds();
	document.write("<br>�����ʱ�䣺" + dhours + ":" + dminutes + ":" + dseconds);
</SCRIPT>

