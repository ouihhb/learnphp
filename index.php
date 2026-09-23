<?php

//library

class Job {
   public function task(ConsoleLogger|NothingLogger $logger) {
      for($i=0; $i<10; $i++) {
         //we do some task
         $logger = new ConsoleLogger();
         $logger->log("Task $i completed!");
      }
   }
}

class ConsoleLogger implements Logger {
   public function log($message) {
       echo "$message\n";
   }
}

class NothingLogger implements Logger{
    public function log($message) {
       
}
}

interface Logger {
   public function log($message);
}
// user code

class FileLogger implements Logger {
   public function log($message) {
      $file = fopen('log.txt', 'a');
      fwrite($file, "$message\n");
      fclose($file);
   }
}

$job = new Job();
$logger = new FileLogger();
$job->task($logger);