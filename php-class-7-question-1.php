<?php 
// Question 01:

// 	make an exam question set (add at list 10 dummy question) like that



$questionSet = [
    [
    'question' => 'Make an appropriate question from this  statement: The class will begin at 8.30 a.m.',

      'options' => [
       'When will the class held?',

       'Where will the class be held?',
        
        'When the class will begin?',
        
        'At what time will the class begin?'
       ]
      ],


      [
        'question' => ' Choose the correct spelling from the following',
    
          'options' => [
           'Antijen',
    
           'Antegen',
            
            'Antigen',
            
            'Antygen'
           ]
          ],

          [
            'question' => ' The Peace movement tends to oppose the_____of dangerous technologies and weapons of mass destruction',
        
              'options' => [
               'extermination',
        
               'smuggling',
                
                'minimization',
                
                'proliferation'
               ]
              ],
    
              [
                'question' => ' Shilpi insisted me __ my going home-',
            
                  'options' => [
                   'from',
            
                   'on',
                    
                    'to',
                    
                    'in'
                   ]
                  ],
                 
    
                  [
                    'question' => ' His friend accused him of spilling the beans. The bold faced phrase means',
                
                      'options' => [
                       'cooking beans',
                
                       'buying coins',
                        
                        'revealing secrets',
                        
                        'spilling a bag of beans '
                       ]
                      ],

                      [
                        'question' => ' Poetry in every language celebrates beauty and truth.',
                    
                          'options' => [
                           'So does art',
                    
                           'So as art',
                            
                            'As well as art',
                            
                            'Why not art? '
                           ]
                          ],           
  [
'question' => ' Poetry in every language celebrates beauty and truth.',
 'options' => [
   'So does art',
   'So as art',
                                
    'As well as art',
 
    'Why not art? '
    ]
 ],           
    
 [
    'question' => ' mechanical organization’ should not be related to a ',
     'options' => [
       'workshop',
       'warehouse',
                                    
        'butcher shop',
     
        'university '
        ]
     ],           
        

  
     [
        'question' => ' The idiom which is not related to the concept: ‘a positive attitude. ',
         'options' => [
           'sour grapes',
           'get up and go',
                                        
            'shot in the arm',
         
            'rose-tinted glasses '
            ]
         ],           
         [
            'question' => '  __________ is not a synonym of the word ‘snarl. ',
             'options' => [
               'Confusion',
               'Disarray',
                                            
                'Intricacy',
             
                'Disentangle '
                ]
             ],           
                
 

     
];



?>


    <!DOCTYPE html>
    <html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <title>Document</title>
    </head>
    <body class="container">
    <?php foreach($questionSet as $key=> $single_Question){?>
      <h2><?php echo ++$key . ")" . $single_Question['question'] . "<br>"; ?></h2>

      <?php foreach( $single_Question['options'] as $key=> $option){?>
        
     
        <input type="radio" id="<?php echo ++$key; ?>" name="vehicle1" value=<p><?php echo " " . $option . "<br>"; ?> </p>
       <?php echo "<br>" ?>
   
    <?php } ?>
     <?php } ?>
    </body>
    </html>
    