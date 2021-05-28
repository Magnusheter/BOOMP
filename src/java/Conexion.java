/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*package conexion;*/
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
/**
 *
 * @author Edgar
 */
public class Conexion {
    public Conexion(){
        try{
            Class.forName("com.mysql.cj.jdbc.Driver").newInstance();
        }catch(Exception e){
            System.out.println("Driver Not found error:" + e.getMessage());
        }
    }
    
    public int iniciaConexion(String name, String password){
        Connection conn = null;
        int result = 0;
        try{
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/bootcamps",
                    "root","hola2016170290");
            String query = "select * from USUARIO where nombre ='"+name+"' and contraseña='"+password+"'";
            Statement st = conn.prepareStatement(query);
            ResultSet rs = st.executeQuery(query);
            System.out.println("antes del if");
            if(rs.next()){
                System.out.println("despues del if");
                result = 1;
            }
        conn.close();
        }catch (SQLException ex) {
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLState: " + ex.getSQLState());
            System.out.println("VendorError: " + ex.getErrorCode());
        }
        return result;
    }
    
    public int insertarUsuario(String name, String password, String correo){
        Connection conn = null;
        int result = 0;
        try{
          conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/bootcamps",
                    "root","hola2016170290");
            String query = "insert into usuario values('"+name+"','"+correo+"','"+password+"');";
            Statement st = conn.createStatement();
            if(!(iniciaConexion(name,password) > 0)){
                st.executeUpdate(query);
                result = 1;
            }
            conn.close();
        }catch(SQLException ex){
            System.out.println("SQLException: " + ex.getMessage());
            System.out.println("SQLState: " + ex.getSQLState());
            System.out.println("VendorError: " + ex.getErrorCode());
        }
        
        return result;
    }
}
