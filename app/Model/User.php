<?php 
class User extends AppModel 
{
    var $name = "User";

    var $validate = array(
        'firstname' => array(
            'firstname_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'First name is required'
            ),
            'firstname_must_be_alphabet' => array(
                'rule' =>  array('custom', '/^[a-zA-Z]*$/i'),
                'message' => 'First name must be alphabet only'
            ),
            'firstname_must_be_max' => array(
                'rule' =>  array('maxLength', 32),
                'message' => 'First name must be 32 length'
            )
        ),
        'lastname' => array(
            'lastname_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Last name is required'
            ),
            'lastname_must_be_alphabet' => array(
                'rule' =>  array('custom', '/^[a-zA-Z]*$/i'),
                'message' => 'Last name must be alphabet only'
            ),
            'lastname_must_be_max' => array(
                'rule' =>  array('maxLength', 32),
                'message' => 'Last name must be 32 length'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('email'),
                'message' => 'Email is required'
            ),
            'maxLength' => array(
                'rule' => array('maxLength', 255),
                'message' => 'Email cannot be more than 255 characters.'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Email is already exists.'
            )
        ),
        'dob' => array(
            'dob_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Date of birth is required'
            )
        ),
        'gender' => array(
            'gender_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Gender is required'
            )
        ),
        'address' => array(
            'address_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Address is required'
            )
        ),
        'country' => array(
            'country_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Country is required'
            )
        ),
        'state' => array(
            'state_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'State is required'
            )
        ),
        'city' => array(
            'city_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'City is required'
            )
        ),
        'doj' => array(
            'doj_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Date of joining is required'
            )
        ),
        'salary' => array(
            'salary_must_not_be_blank' => array(
                'rule' => 'notBlank',
                'message' => 'Salary is required'
            ),
            'salary_must_be_numeric' => array(
                'rule' => array('money', 'left'),
                'message' => 'Salary must be a valid monetary amount'
            ),
        ),
    );
}
