import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class repeat extends HttpServlet {
    public void doGet(HttpServletRequest request, HttpServletResponse response) 
    throws IOException, ServletException {
        String name = request.getParameter("entername");
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        out.println("<html><body>");
         for(int i = 1; i <= 10; i++) {
            out.println("<h3>" + i + ". " + name + "</h3>");
        }

        out.println("</body></html>");
    }
}