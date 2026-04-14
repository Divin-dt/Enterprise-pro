<?php
   
//This is the logic behind the viewer php files
class ViewerHelper {
      
// LINE 4: Map each index number to its image filename
// INSTRUCTION: Change the filenames if your images are named differently
      private array $tlaFiles = [
        1 => "001Index A,B.jpg",
        2 => "001Index B,C.jpg",
        3 => "001Index D,E,F,G.jpg",
        4 => "001Index H,I,J.jpg",
        5 => "001Index K,L,M.jpg",
        6 => "001Index N,O,P.jpg",
        7 => "001Index R,S.jpg",
        8 => "001Index T,U,V.jpg",
        9 => "001Index W,Y.jpg",
    ];

// LINE 5: Map each index number to its display label
    private array $tlaLabels = [
        1 => "Index A to B",
        2 => "Index B to C",
        3 => "Index D to G",
        4 => "Index H to J",
        5 => "Index K to M",
        6 => "Index N to P",
        7 => "Index R to S",
        8 => "Index T to U",
        9 => "Index W to Y",
    ];

      //Establishing the variables for the first, last and current page numbers
      private int $first;
      private int $last;
      private int $current;

      //Blueprint of class for all the viewer classes
      public function __construct(int $first, int $last, int $requested) {
        $this->first = $first;
        $this->last = $last;
        $this->current = max($first, min($last, $requested));
      }
    
      //Creating all the functions that allow for the functionality of the viewer
      //Obtaining the current page number
      public function getCurrent(): int {return $this->current; }
      //Obtaining the previous page number
      public function getPrevious(): int {return $this->current - 1; }
      //Obtaining the next page number
      public function getNext(): int {return $this->current + 1;}
      //Obtaining the first page number
      public function getFirst(): int {return $this->first; }
      //Obtaining the last page number
      public function getLast(): int {return $this->last; }

      //Check to see if the current page is the first page/ matches the $first variable
      public function isFirst(): bool { return $this->current === $this->first; }
      //Check to see if the current page is the last page/ matches the $last variable
      public function isLast(): bool { return $this->current === $this->last; }

      //AHS usage specific if functions
      //Retrieving the image based on the current page number
      public function getAHSImageFile(): string {
        if ($this->current === 0) {
            return "Front cover.jpg";
        }
        return "Page " . $this->current . ".jpg";
      }

      //Retrieving the Page label based on the current page number
      public function getAHSPageLabel(): string {
        if ($this->current === 0) {
            return "Front Cover";
        }
        return "Page ". $this->current . " of ". $this->last;
      }

     //TLA usage specific if functions

      public function getTLAImageFile(): string {
        return $this->tlaFiles[$this->current];
     }

     public function getTLALabel(): string {
        return $this->tlaLabels[$this->current];
     }
}

?>