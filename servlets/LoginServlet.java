package servlets;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;


@WebServlet("/LoginServlet")
public class LoginServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String email = request.getParameter("email");
        String password = request.getParameter("password");

        // JDBC code to insert user data into the database
        String url = "jdbc:mysql://localhost:3306/your_database_name";
        String username = "your_username";
        String dbPassword = "your_password";

        try {
            Connection conn = DriverManager.getConnection(url, username, dbPassword);
            String sql = "INSERT INTO users (email, password) VALUES (?, ?)";
            PreparedStatement statement = conn.prepareStatement(sql);
            statement.setString(1, email);
            statement.setString(2, password);
            statement.executeUpdate();
            conn.close();
        } catch (SQLException e) {
            e.printStackTrace();
            // Handle database error
            response.sendError(HttpServletResponse.SC_INTERNAL_SERVER_ERROR, "Error processing database operation: " + e.getMessage());


        }
    }
}
