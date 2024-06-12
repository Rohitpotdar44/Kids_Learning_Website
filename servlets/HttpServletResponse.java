package servlets;

public interface HttpServletResponse {

    Object SC_INTERNAL_SERVER_ERROR = null;

    void sendError(Object scInternalServerError, String string);

}
