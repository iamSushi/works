
package main;

class Student {
    private int student_id;
    private String course, firstname, middlename, surname, birthdate, gender;
    
    public Student(int student_id, String course, String firstname, String middlename, String surname, String birthdate, String gender){
        this.student_id = student_id;
        this.course = course;
        this.firstname = firstname;
        this.middlename = middlename;
        this.surname = surname;
        this.birthdate = birthdate;
        this.gender = gender;
    }
    public int getstudent_id(){
        return student_id;
    }
    public String getcourse(){
        return course;
    }
    public String getfirstname(){
        return firstname;
    }
    public String getmiddlename(){
        return middlename;
    }
    public String getsurname(){
        return surname;
    }
    public String getbirthdate(){
        return birthdate;
    }
    public String getgender(){
        return gender;
    }
    
}
