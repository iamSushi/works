package main;
import java.sql.*;
import javax.swing.*;
public class MySqlConnect {
    Connection conn = null;
    public static Connection ConnectDB(){
        try{
            Connection conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/projectoop", "root", "");
            return conn;
        }
        catch(Exception e){
            JOptionPane.showMessageDialog(null, e);
            return null;
        }
    }
}
